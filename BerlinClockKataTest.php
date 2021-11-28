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

    public function test5Minute0ShouldReturn0Lamp():void{
        //Arrange
        $Berlin_Clock = new Berlin_Clock_Kata();
        //Act
        $actual =$Berlin_Clock->minute5(0);
        //Assert
        $this->assertEquals("OOOOOOOOOOO",$actual);
    }

    public function test5Minute17ShouldReturn3Lamp():void{
        //Arrange
        $Berlin_Clock = new Berlin_Clock_Kata();
        //Act
        $actual =$Berlin_Clock->minute5(17);
        //Assert
        $this->assertEquals("YYROOOOOOOO",$actual);
    }

    public function test5Minute23ShouldReturn4Lamp():void{
        //Arrange
        $Berlin_Clock = new Berlin_Clock_Kata();
        //Act
        $actual =$Berlin_Clock->minute5(23);
        //Assert
        $this->assertEquals("YYRYOOOOOOO",$actual);
    }

    public function test5Minute26ShouldReturn5Lamp():void{
        //Arrange
        $Berlin_Clock = new Berlin_Clock_Kata();
        //Act
        $actual =$Berlin_Clock->minute5(26);
        //Assert
        $this->assertEquals("YYRYYOOOOOO",$actual);
    }

    public function test5Minute34ShouldReturn6Lamp():void{
        //Arrange
        $Berlin_Clock = new Berlin_Clock_Kata();
        //Act
        $actual =$Berlin_Clock->minute5(34);
        //Assert
        $this->assertEquals("YYRYYROOOOO",$actual);
    }

    public function test5Minute35ShouldReturn7Lamp():void{
        //Arrange
        $Berlin_Clock = new Berlin_Clock_Kata();
        //Act
        $actual =$Berlin_Clock->minute5(35);
        //Assert
        $this->assertEquals("YYRYYRYOOOO",$actual);
    }

    public function test5Minute41ShouldReturn8Lamp():void{
        //Arrange
        $Berlin_Clock = new Berlin_Clock_Kata();
        //Act
        $actual =$Berlin_Clock->minute5(41);
        //Assert
        $this->assertEquals("YYRYYRYYOOO",$actual);
    }

    public function test5Minute49ShouldReturn9Lamp():void{
        //Arrange
        $Berlin_Clock = new Berlin_Clock_Kata();
        //Act
        $actual =$Berlin_Clock->minute5(49);
        //Assert
        $this->assertEquals("YYRYYRYYROO",$actual);
    }

    public function test5Minute50ShouldReturn10Lamp():void{
        //Arrange
        $Berlin_Clock = new Berlin_Clock_Kata();
        //Act
        $actual =$Berlin_Clock->minute5(50);
        //Assert
        $this->assertEquals("YYRYYRYYRYO",$actual);
    }
}
