<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class GenderValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        /* @var Gender $constraint */

        if (null === $value || '' === $value) {
            return;
        }

        // Check if the value is one of the allowed options
        $allowedOptions = ['m', 'f'];
        if (!in_array($value, $allowedOptions)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $value)
                ->addViolation();
        }
    }
}