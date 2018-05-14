<?php 
namespace Tests\Feature;

use Tests\TestCase;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\URL;

/**
* 
*/
class advancedTest extends TestCase
{
	public function testFirst()
	{
		$foo = false;
		$this->assertTrue($foo);
	}

	public function testSlugifytoUrlIfIsString()
	{
		$original = 'this is a URL string';
		$expected = 'this-is-a-URL-string';
		$url = new URL();
		$results = $url->slugify($original);

		$this->assertEquals($expected, $results);
	}

	public function testSluggifyReturnsExpectedForStringsContainingNumbers()
    {
        $originalString = 'This1 string2 will3 be 44 sluggified10';
        $expectedResult = 'this1-string2-will3-be-44-sluggified10';

        $url = new URL();

        $result = $url->sluggify($originalString);

        $this->assertEquals($expectedResult, $result);
    }

    public function testSluggifyReturnsExpectedForStringsContainingSpecialCharacters()
    {
        $originalString = 'This! @string#$ %$will ()be "sluggified';
        $expectedResult = 'this-string-will-be-sluggified';

        $url = new URL();

        $result = $url->sluggify($originalString);

        $this->assertEquals($expectedResult, $result);
    }

    public function testSluggifyReturnsExpectedForStringsContainingNonEnglishCharacters()
    {
        $originalString = "Tänk efter nu – förr'n vi föser dig bort";
        $expectedResult = 'tank-efter-nu-forrn-vi-foser-dig-bort';

        $url = new URL();

        $result = $url->sluggify($originalString);

        $this->assertEquals($expectedResult, $result);
    }

    public function testSluggifyReturnsExpectedForEmptyStrings()
    {
        $originalString = '';
        $expectedResult = '';

        $url = new URL();

        $result = $url->sluggify($originalString);

        $this->assertEquals($expectedResult, $result);
    }

}
