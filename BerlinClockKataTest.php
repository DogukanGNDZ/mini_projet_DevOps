<?php
use PHPUnit\Framework\TestCase;
require_once("Berlin_Clock_Kata.php");
class BerlinClockKataTest  extends TestCase{

    public function testMinute1ShouldReturn1Lamp():void{
        //Arrange
        $Berlin_Clock = new Berlin_Clock_Kata();
        //Act
        $actual =$Berlin_Clock->minute(1);
        //Assert
        $this->assertEquals("YOOO",$actual);
    }

    public function testMinute2ShouldReturn2Lamp():void{
        //Arrange
        $Berlin_Clock = new Berlin_Clock_Kata();
        //Act
        $actual =$Berlin_Clock->minute(2);
        //Assert
        $this->assertEquals("YYOO",$actual);
    }

    public function testMinute3ShouldReturn3Lamp():void{
        //Arrange
        $Berlin_Clock = new Berlin_Clock_Kata();
        //Act
        $actual =$Berlin_Clock->minute(3);
        //Assert
        $this->assertEquals("YYYO",$actual);
    }

    public function testMinute14ShouldReturn4Lamp():void{
        //Arrange
        $Berlin_Clock = new Berlin_Clock_Kata();
        //Act
        $actual =$Berlin_Clock->minute(14);
        //Assert
        $this->assertEquals("YYYY",$actual);
    }

    public function testMinute10ShouldReturn0Lamp():void{
        //Arrange
        $Berlin_Clock = new Berlin_Clock_Kata();
        //Act
        $actual =$Berlin_Clock->minute(10);
        //Assert
        $this->assertEquals("OOOO",$actual);
    }

    public function test5Minute10ShouldReturn2Lamp():void{
        //Arrange
        $Berlin_Clock = new Berlin_Clock_Kata();
        //Act
        $actual =$Berlin_Clock->minute5(10);
        //Assert
        $this->assertEquals("YY0OOOOOOOO",$actual);
    }

    public function test5Minute6ShouldReturn1Lamp():void{
        //Arrange
        $Berlin_Clock = new Berlin_Clock_Kata();
        //Act
        $actual =$Berlin_Clock->minute5(6);
        //Assert
        $this->assertEquals("YOOOOOOOOOO",$actual);
    }

}
