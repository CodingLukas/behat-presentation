<?php

namespace Tests\Behat\Traits;

use Behat\Behat\Hook\Scope\AfterStepScope;
use Behat\Testwork\Tester\Result\ExceptionResult;
use Behat\Testwork\Tester\Result\TestResult;

trait DetailedErrorMessageTrait
{
    /**
     * @AfterStep
     * @param AfterStepScope $scope
     */
    public function printSmallStacktraceAfterFailure(AfterStepScope $scope)
    {
        $testResult = $scope->getTestResult();
        if ($testResult->getResultCode() === TestResult::FAILED) {
            if ($testResult instanceof ExceptionResult && $testResult->hasException()) {
                echo mb_substr($testResult->getException()->getTraceAsString(), 0, 350);
            }
        }
    }
}
