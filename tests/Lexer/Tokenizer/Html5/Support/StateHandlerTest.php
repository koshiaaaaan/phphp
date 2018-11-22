<?php
namespace Phphp\Tests\Lexer\Tokenizer\Html5\Support;

use ReflectionClass;
use Phphp\Contracts\Lexer\Tokenizer\Html5\State;
use Phphp\Lexer\Tokenizer\Html5\Support\StateHandler;
use PHPUnit\Framework\TestCase;

class StateHandlerTest extends TestCase
{
    /**
     * Stateのセットができること
     *
     * - `setState` の返り値が自身のオブジェクトであること
     * - `currentState` プロパティに `setState` でセットしたクラス名が入っていること
     *
     * @throws \ReflectionException
     */
    public function testSetState()
    {
        // `StateHandler` のモックを作成
        /** @var \PHPUnit\Framework\MockObject\MockObject | \Phphp\Lexer\Tokenizer\Html5\Support\StateHandler $stateHandler */
        $stateHandler = $this->getMockBuilder(StateHandler::class)
            ->getMockForTrait();

        // `State` インターフェースのモックを作成
        /** @var \PHPUnit\Framework\MockObject\MockObject | \Phphp\Contracts\Lexer\Tokenizer\Html5\State $stateHandler */
        $mockState = $this->getMockBuilder(State::class)
            ->getMock();

        // `StateHandler` の `currentState` プロパティをアクセス可にする
        $property = (new ReflectionClass($stateHandler))->getProperty('currentState');
        $property->setAccessible(true);

        $this->assertInstanceOf(get_class($stateHandler), $stateHandler->setState(get_class($mockState)));
        $this->assertSame(get_class($mockState), $property->getValue($stateHandler));
    }

    /**
     * `ReturnState` のゲット、セットができること
     *
     * - `setReturnState` の返り値が自身のオブジェクトであること
     * - `getReturnState` の返り値が `setReturnState` でセットしたクラス名であること
     */
    public function testReturnState()
    {
        // `StateHandler` のモックを作成
        /** @var \PHPUnit\Framework\MockObject\MockObject | \Phphp\Lexer\Tokenizer\Html5\Support\StateHandler $stateHandler */
        $stateHandler = $this->getMockBuilder(StateHandler::class)
            ->getMockForTrait();

        // `State` インターフェースのモックを作成
        /** @var \PHPUnit\Framework\MockObject\MockObject | \Phphp\Contracts\Lexer\Tokenizer\Html5\State $stateHandler */
        $mockState = $this->getMockBuilder(State::class)
            ->getMock();

        $this->assertInstanceOf(get_class($stateHandler), $stateHandler->setReturnState(get_class($mockState)));
        $this->assertSame(get_class($mockState), $stateHandler->getReturnState());
    }

    /**
     * `StateHandler` の `handle` メソッドを実行し、 `State` クラスの
     * `handle` メソッドが `null` を返した場合、 `StateHandler` の
     * `setState` メソッドは呼ばれないこと
     */
    public function testExecuteHandleWillReturnNull()
    {
        // `StateHandler` のモックを作成
        /** @var \PHPUnit\Framework\MockObject\MockObject | \Phphp\Lexer\Tokenizer\Html5\Support\StateHandler $stateHandler */
        $stateHandler = $this->getMockBuilder(StateHandler::class)
            ->setMethods(['newState', 'setState'])
            ->getMockForTrait();

        // `State` インターフェースのモックを作成
        /** @var \PHPUnit\Framework\MockObject\MockObject | \Phphp\Contracts\Lexer\Tokenizer\Html5\State $stateHandler */
        $mockState = $this->getMockBuilder(State::class)
            ->setMethods(['handle'])
            ->getMock();

        // `StateHandler` モックのメソッドの動作を定義
        $stateHandler->expects($this->once())
            ->method('newState')
            ->willReturn($mockState);
        $stateHandler->expects($this->never())
            ->method('setState');

        // `State` モックのメソッドの動作を定義
        $mockState->expects($this->once())
            ->method('handle')
            ->willReturn(null);

        $this->assertInstanceOf(get_class($stateHandler), $stateHandler->handle());
    }

    /**
     * `StateHandler` の `handle` メソッドを実行し、 `State` クラスの
     * `handle` メソッドが別の `State` クラスを返した場合、 `StateHandler` の
     * `setState` メソッドが呼ばれ、引数として返された `State` クラスが渡されること
     */
    public function testExecuteHandleWillReturnOtherState()
    {
        // `StateHandler` のモックを作成
        /** @var \PHPUnit\Framework\MockObject\MockObject | \Phphp\Lexer\Tokenizer\Html5\Support\StateHandler $stateHandler */
        $stateHandler = $this->getMockBuilder(StateHandler::class)
            ->setMethods(['newState', 'setState'])
            ->getMockForTrait();

        // `State` インターフェースのモックを作成
        /** @var \PHPUnit\Framework\MockObject\MockObject | \Phphp\Contracts\Lexer\Tokenizer\Html5\State $stateHandler */
        $mockState1 = $this->getMockBuilder(State::class)
            ->setMockClassName('MockState1')
            ->setMethods(['handle'])
            ->getMock();

        /** @var \PHPUnit\Framework\MockObject\MockObject | \Phphp\Contracts\Lexer\Tokenizer\Html5\State $stateHandler */
        $mockState2 = $this->getMockBuilder(State::class)
            ->setMockClassName('MockState2')
            ->getMock();

        // `StateHandler` モックのメソッドの動作を定義
        $stateHandler->expects($this->once())
            ->method('newState')
            ->willReturn($mockState1);
        $stateHandler->expects($this->once())
            ->method('setState')
            ->with($this->stringContains(get_class($mockState2)));

        // `State` モックのメソッドの動作を定義
        $mockState1->expects($this->once())
            ->method('handle')
            ->willReturn(get_class($mockState2));

        $this->assertInstanceOf(get_class($stateHandler), $stateHandler->handle());
    }
}