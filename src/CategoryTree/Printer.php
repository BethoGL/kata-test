<?php

namespace Kata\CategoryTree;

class Printer
{
    public function build(Category $parent, int $spaces = 0): string
    {
        $result = $this->formatLine($parent->name(), $spaces);
        $items = $parent->children();
        usort($items, fn($s1, $s2) => $s1->name() <=> $s2->name());
        foreach ($items as $item) {
            if ($item->children()) {
                $result .= $this->build($item, $spaces + 2);
            } else {
               $result .= $this->formatLine($item->name(), $spaces + 2);
            }
        }
        return $result;
    }

    private function getSpacing(int $length): string
    {
        return str_repeat(' ', $length);
    }

    private function formatLine(string $str, int $spaces): string {
        return <<<EOT
        {$this->getSpacing($spaces)}{$str}
        
        EOT;
    }

}
