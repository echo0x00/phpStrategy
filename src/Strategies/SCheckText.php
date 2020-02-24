<?php

/**
 * Проверка параметров текста
 * php version 7.4.3
 *
 * @category Class
 * @package  StrategyTest
 * @author   Alex Shakmaev <savproga@mail.ru>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://www.uxel.ru
 */

namespace App\Strategies;

use App\Interfaces\ICheckText as ICheckText;

class SCheckText
{
    private $strategy;
    public function __construct(ICheckText $unitStrategy)
    {
        $this -> strategy = $unitStrategy;
    }

    final public function getResultByText($text): string
    {
        return $this -> strategy -> check($text);
    }
}
