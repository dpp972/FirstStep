<?php

use Madinina\Adresse;
use Madinina\Exception\NotAlphabeticException;
use Madinina\MadProvider;
use Madinina\Person;

class FirstTest extends PHPUnit_Framework_TestCase
{

    public function testTrueIsTrue()
    {
        $this->assertTrue( true);
    }

    public function testPersonHasPrenom()
    {
        $pa = new Person( 'Jon');
        $this->assertAttributeNotEmpty( 'prenom', $pa);
    }

    /**
     * @expectedException Madinina\Exception\NotAlphabeticException
     * @throws Madinina\Exception\NotAlphabeticException
     */
    public function testPrenomIsNotAlphabetic()
    {
        $pa = new Person( 'Jon123@#io');

        $pattern = '/^([a-z]|[A-Z])*$/';
        if( !preg_match( $pattern, $pa->getPrenom())) {
            throw new NotAlphabeticException;
        }
    }

    public function testPrenomIsAlphabetic()
    {
        $expectedStr = 'Jon';
        $pa = new Person( $expectedStr);
        $this->assertAttributeEquals( $expectedStr, 'prenom', $pa);
    }

    /**
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $this->assertEquals($expected, $a + $b);
    }

    public function additionProvider()
    {
//        return array(
//            array(0, 0, 0),
//            array(0, 1, 1),
//            array(1, 0, 1),
//            array(1, 1, 3)
//        );
        return new MadProvider();
    }

    public function testPersonHasAnAdress(){

//        $expectedAdr = new Adresse( 97209, 'Pinon', 87, 'Martinique', 'rue', 'Fort de France');
        $expectedAdr = $this->getMockBuilder('Madinina\Adresse')
            ->disableOriginalConstructor()
            ->getMock();
        $pa = new Person( 'Toto', 'Tutu', $expectedAdr);

        $this->assertEquals( $expectedAdr, $pa->getAdresse());

    }
}
