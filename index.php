<?php
declare(strict_types=1);

use Init\Cells;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;
use Twig\TwigFunction;

require 'vendor/autoload.php';
require './Init/Cells.php';

$loader = new FilesystemLoader('templates');
$twig_template = new Environment($loader);

$twig_function = new TwigFunction('Cells', function () {
    echo Cells::init();
});

$twig_template->addFunction($twig_function);

try
{
    $template = $twig_template->load('layout/app.html.twig');
} catch (LoaderError $exception)
{
    echo $exception->getMessage();
    exit();
} catch (RuntimeError $exception)
{
    echo $exception->getMessage();
    exit();
} catch (SyntaxError $exception)
{
    echo $exception->getMessage();
    exit();
}
echo $template->render();