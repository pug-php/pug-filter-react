<?php

use Pug\Pug;

class ExamplesTest extends \PHPUnit_Framework_TestCase
{
    public function caseProvider()
    {
        $cases = array();

        $examples = __DIR__ . '/../examples';
        foreach (scandir($examples) as $file) {
            if (substr($file, -4) === '.pug') {
                $cases[] = array($examples . '/' . substr($file, 0, -4) . '.html', $examples . '/' . $file);
            }
        }

        return $cases;
    }

    /**
     * @dataProvider caseProvider
     */
    public function testJadeGeneration($htmlFile, $jadeFile)
    {
        $jade = new Pug();
        $renderedHtml = $jade->render($jadeFile, array(
            'color' => 'yellow',
        ));
        $htmlFileContents = file_get_contents($htmlFile);

        $actual = trim(preg_replace('`[\s_]+`', '', $renderedHtml));
        $expected = trim(preg_replace('`[\s_]+`', '', $htmlFileContents));

        $this->assertSame($expected, $actual, $jadeFile . ' should match ' . $htmlFile . ' as html');

        $actual = trim(preg_replace('`[\s_]+`', ' ', strip_tags($renderedHtml)));
        $expected = trim(preg_replace('`[\s_]+`', ' ', strip_tags($htmlFileContents)));

        $this->assertSame($expected, $actual, $jadeFile . ' should match ' . $htmlFile . ' as text');
    }
}
