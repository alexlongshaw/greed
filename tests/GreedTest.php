<?php

declare(strict_types=1);

namespace Tests\Lendable\Greed;

use Lendable\Greed\Greed;
use PHPUnit\Framework\TestCase;

class GreedTest extends TestCase
{
    /**
     * @test
     */
    public function it_should_score_0_when_there_are_no_die(): void
    {
        $fixture = new Greed();

        $this->assertSame(0, $fixture->score([]));
    }

//    /**
//     * @test
//     */
//    public function it_should_score_0_for_a_single_2(): void
//    {
//        $fixture = new Greed();
//
//        $this->assertSame(0, $fixture->score([2]));
//    }
//
//    /**
//     * @test
//     */
//    public function it_should_score_0_for_a_double_2(): void
//    {
//        $fixture = new Greed();
//
//        $this->assertSame(0, $fixture->score([2, 2]));
//    }
//
//    /**
//     * @test
//     */
//    public function it_should_score_100_for_a_single_1(): void
//    {
//        $fixture = new Greed();
//
//        $this->assertSame(100, $fixture->score([1]));
//    }
//
//    /**
//     * @test
//     */
//    public function it_should_score_50_for_a_single_5(): void
//    {
//        $fixture = new Greed();
//
//        $this->assertSame(5, $fixture->score([5]));
//    }
//
//    /**
//     * @test
//     */
//    public function it_should_score_1000_for_triple_1s(): void
//    {
//        $fixture = new Greed();
//
//        $this->assertSame(1000, $fixture->score([1, 1, 1]));
//    }
//
//    /**
//     * @test
//     */
//    public function it_should_score_800_for_3_pairs(): void
//    {
//        $fixture = new Greed();
//
//        $this->assertSame(800, $fixture->score([2, 2, 3, 3, 4, 4]));
//    }
//
//    /**
//     * @test
//     */
//    public function it_should_score_1200_for_a_straight(): void
//    {
//        $fixture = new Greed();
//
//        $this->assertSame(1200, $fixture->score([1, 2, 3, 4, 5, 6]));
//    }
//
//    public function it_should_throw_an_invalid_argument_exception_if_there_are_too_many_dice(): void
//    {
//        $this->expectException(\InvalidArgumentException::class);
//        $this->expectExceptionMessage('Expected a maximum of 6 dice, got 7.');
//
//        $fixture = new Greed();
//        $fixture->score([1, 2, 3, 4, 5, 6, 6]);
//    }
//
//    public function it_should_throw_an_invalid_argument_exception_if_a_die_value_is_too_low(): void
//    {
//        $this->expectException(\InvalidArgumentException::class);
//        $this->expectExceptionMessage('Die at position 0 is invalid.');
//
//        $fixture = new Greed();
//        $fixture->score([0, 2, 3, 4, 5, 6]);
//    }
//
//    public function it_should_throw_an_invalid_argument_exception_if_a_die_value_is_too_high(): void
//    {
//        $this->expectException(\InvalidArgumentException::class);
//        $this->expectExceptionMessage('Die at position 4 is invalid.');
//
//        $fixture = new Greed();
//        $fixture->score([1, 2, 3, 4, 7]);
//    }
}
