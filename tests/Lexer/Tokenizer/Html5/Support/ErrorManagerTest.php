<?php
namespace Phphp\Tests\Lexer\Tokenizer\Html5\Support;

use Phphp\Lexer\Tokenizer\Html5\Error\ParseErrorException;
use Phphp\Lexer\Tokenizer\Html5\Support\ErrorManager;
use PHPUnit\Framework\TestCase;

class ErrorManagerTest extends TestCase
{
    /**
     * @throws \Phphp\Lexer\Tokenizer\Html5\Error\ParseErrorException
     */
    public function testAbortParsingByError()
    {
        /**
         * `ErrorManager` のモックを作成
         *
         * @var \PHPUnit\Framework\MockObject\MockObject | \Phphp\Lexer\Tokenizer\Html5\Support\ErrorManager $errorManager
         */
        $errorManager = $this->getMockBuilder(ErrorManager::class)
            ->getMockForTrait();

        $this->assertInstanceOf(get_class($errorManager), $errorManager->abortParsingByError(true));

        $this->expectException(ParseErrorException::class);
        $errorManager->error(new ParseErrorException());
    }

    /**
     * @throws \Phphp\Lexer\Tokenizer\Html5\Error\ParseErrorException
     */
    public function testDoesNotAbortParsingByError()
    {
        /**
         * `ErrorManager` のモックを作成
         *
         * @var \PHPUnit\Framework\MockObject\MockObject | \Phphp\Lexer\Tokenizer\Html5\Support\ErrorManager $errorManager
         */
        $errorManager = $this->getMockBuilder(ErrorManager::class)
            ->setMethods(['stockError'])
            ->getMockForTrait();
        $errorManager->expects($this->exactly(1))
            ->method('stockError')
            ->with($this->isInstanceOf(ParseErrorException::class))
            ->willReturn($errorManager);

        $this->assertInstanceOf(get_class($errorManager), $errorManager->abortParsingByError(false));

        $this->assertInstanceOf(get_class($errorManager), $errorManager->error(new ParseErrorException()));
    }
}