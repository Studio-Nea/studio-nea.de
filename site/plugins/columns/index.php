<?php
Kirby::plugin('kirby/columns', [
  'hooks' => [
    'kirbytags:before' => function ($text, array $data = []) {

      $text = preg_replace_callback('!\(columns(…|\.{3})\)(.*?)\((…|\.{3})columns\)!is', function($matches) use($text, $data) {

        $columns        = preg_split('!(\n|\r\n)\+{4}\s+(\n|\r\n)!', $matches[2]);
        $html           = [];
        $classItem      = $this->option('kirby.columns.item', 'column');
        $classContainer = $this->option('kirby.columns.container', 'columns');

        foreach ($columns as $column) {
            $html[] = '<div class="' . $classItem . '">' . $this->kirbytext($column, $data) . '</div>';
        }

        return '<div class="' . $classContainer . '">' . implode($html) . '</div>';

      }, $text);

      return $text;
    }

  ]
]);