<?php

namespace Drupal\social_user\Tests;

use Drupal\Tests\UnitTestCase;
use Drupal\social_user\Plugin\Validation\Constraint\SocialUserNameConstraint;
use Drupal\social_user\Plugin\Validation\Constraint\SocialUserNameConstraintValidator;
use Egulias\EmailValidator\EmailValidator;
use Egulias\EmailValidator\Validation\RFCValidation;

/**
 * @coversDefaultClass \Drupal\social_user\Plugin\Validation\Constraint\SocialUserNameConstraintValidator
 *
 * @group user
 */
class SocialUserNameConstraintTest extends UnitTestCase {

  /**
   * Test the SocialUserNameConstraint against the given asserts.
   *
   * @covers ::validate
   *
   * @dataProvider providerTestValidate
   */
  public function testValidate($items, $expected_violation, $expected_definition_result = NULL, $name = NULL) {
    // Mock our typed data interface.
    $manager = $this->createMock('Drupal\Core\TypedData\TypedDataManagerInterface');
    $definition = $this->createMock('Drupal\Core\TypedData\TypedDataInterface');

    if ($expected_definition_result !== NULL) {
      $manager->expects($this->any())
        ->method('create')
        ->willReturn($definition);

      $definition->expects($this->any())
        ->method('validate')
        ->willReturn($expected_definition_result);
    }
    else {
      $manager->expects($this->never())
        ->method('create');

      $definition->expects($this->never())
        ->method('validate');
    }

    $constraint = new SocialUserNameConstraint();
    $constraintValidator = new SocialUserNameConstraintValidator($manager);

    // If a violation is expected, then the context's addViolation method will
    // be called, otherwise it should not be called.
    $context = $this->createMock('Symfony\Component\Validator\Context\ExecutionContextInterface');

    if ($expected_violation) {
      $context->expects($this->any())
        ->method('addViolation')
        ->with($constraint->usernameIsEmailMessage);
    }
    else {
      $context->expects($this->never())
        ->method('addViolation');
    }

    $constraintValidator->initialize($context);
    $constraintValidator->validate($items, $constraint);

    // Validate Symfony.
    if ($name !== NULL) {
      $validator = new EmailValidator();
      $rfcValidation = new RFCValidation();
      $is_valid_email = $validator->isValid($name, $rfcValidation);
      if ($expected_violation) {
        $this->assertTrue($is_valid_email, "Exepected a valid email, found no invalid email");
      }
      else {
        $this->assertFalse($is_valid_email, "Exepected an invalid email, found a valid email");
      }
    }
  }

  /**
   * Data provider for ::testValidate().
   */
  public function providerTestValidate() {
    $cases = [];

    // Case 1: Validation context should not be touched if no items are passed.
    $cases[] = [NULL, FALSE];

    // Case 2: Empty user should be ignored.
    $field_definition = $this->createMock('Drupal\Core\Field\FieldDefinitionInterface');
    $items = $this->createMock('Drupal\Core\Field\FieldItemListInterface');
    $items->expects($this->any())
      ->method('getFieldDefinition')
      ->willReturn($field_definition);
    $items->expects($this->any())
      ->method('first')
      ->willReturn(NULL);
    $cases[] = [$items, FALSE];

    // Correct email cases.
    // See https://en.wikipedia.org/wiki/Email_address.
    $invalid_names = [
      'prettyandsimple@example.com',
      'very.common@example.com',
      'disposable.style.email.with+symbol@example.com',
      'other.email-with-dash@example.com',
      '"much.more unusual"@example.com',
      '"very.unusual.@.unusual.com"@example.com',
      '#!$%&\'*+-/=?^_`{}|~@example.org',
      'user@com',
      'user@localserver',
      'user@[IPv6:2001:db8::1]',
    ];

    foreach ($invalid_names as $name) {
      $cases[] = [
        $this->itemsMock($name),
        TRUE,
        $this->buildViolationList(0),
        $name,
      ];
    }
    // These names are valid names, but are validated as incorrect.
    // Because we use the same validation for the Emails it will not
    // Affect the email login system.
    $valid_names_but_valid_emails = [
      'Abc.example.com (no @ character)',
    ];
    $email_violations = 1;
    foreach ($valid_names_but_valid_emails as $name) {
      $cases[] = [
        $this->itemsMock($name),
        FALSE,
        $this->buildViolationList($email_violations),
        $name,
      ];
      $email_violations++;
    }

    $valid_names = [
      'admin',
      'user1',
      'haha',
      'neil goodman',
      'Abc.example.com',
      'ohn.doe@example..com',
      'this is"not\allowed@example.com',
      'just"not"right@example.com',
      'john..doe@example.com',
      'a"b(c)d,e:f;g<h>i[j\k]l@example.com',
      'A@b@c@example.com',
    ];
    $email_violations = 3;
    foreach ($valid_names as $name) {
      $cases[] = [
        $this->itemsMock($name),
        FALSE,
        $this->buildViolationList($email_violations),
        $name,
      ];
      $email_violations++;
    }

    return $cases;
  }

  /**
   * {@inheritdoc}
   */
  protected function itemsMock($name) {
    $name_field = $this->createMock('Drupal\Core\Field\FieldItemInterface');
    $name_field->expects($this->any())
      ->method('__get')
      ->willReturn($name);

    $field_definition = $this->createMock('Drupal\Core\Field\FieldDefinitionInterface');
    $items = $this->createMock('Drupal\Core\Field\FieldItemListInterface');
    $items->expects($this->any())
      ->method('getFieldDefinition')
      ->willReturn($field_definition);
    $items->expects($this->any())
      ->method('first')
      ->willReturn($name_field);
    return $items;
  }

  /**
   * Builds a list interface to return violations.
   *
   * @param int $number_of_items
   *   Number of items you want to build in the list.
   *
   * @return array
   *   Mock constraintViolationItems with the count of $number_of_items.
   */
  protected function buildViolationList($number_of_items) {
    $violationList = [];
    for ($count = 0; $count < $number_of_items; $count++) {
      $violation = $this->createMock('Symfony\Component\Validator\ConstraintViolationInterface');
      $violationList[] = $violation;
    }
    return $violationList;
  }

}
