<?php

namespace Core;

/**
 * View
 *
 * PHP Version 7.2.5
 */
class View
{

    /**
     * Render a view file
     *
     * @param string $view The view file
     * @param array  $args Associative array of data to display in the view (optional)
     *
     * @return void
     */
    public static function render($view, $args = [])
    {
        extract($args, EXTR_SKIP);

        $file = "../App/Views/$view";  // relative to Core directory

        if (is_readable($file)) {
            require $file;
        } else {
            echo "$file not found";
        }
    }

    /**
     * Render a view template using Twig
     *
     * @param string $template The template file
     * @param array  $args     Associative array of data to display in the view (optional)
     *
     * @return void
     */
    public static function renderTemplate($template, $args = [])
    {
        static $twig = null;

        if ($twig === null) {
            $loader = new \Twig_Loader_Filesystem(array('../App/Views')); //, '../public/css', '../public/js', '../public/fonts', '../public/images'

            $twig = new \Twig_Environment($loader);

            // $options = [
            //     'path' => '../public/cache',
            //     'cache_enabled' => false,
            //     'cache_path' => '/cache',
            //     'cache_name' => 'assets-cache',
            //     'cache_lifetime' => 0,
            //     'minify' => 1
            // ];

            // $twig->addExtension(new \Odan\Twig\TwigAssetsExtension($twig, $options));

            // $lexer = new \Twig_Lexer(
            //     $twig, array(
            //         'tag_block'     => array('{', '}'),
            //         'tag_variable'  => array('{{ $', '}}'),
            //         'tag_comment'  => array('{{ /', '}}')
            //     )
            // );
            // $twig->setLexer($lexer);
        }

        echo $twig->render($template, $args);
    }
}
