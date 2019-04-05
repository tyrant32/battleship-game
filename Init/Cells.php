<?php
declare(strict_types=1);

namespace Init;

/**
 * Class Cells
 */
class Cells
{
    public $rows;
    public $cols;
    protected $gridArray = [];
    protected $currentGridArray = [];
    
    /**
     * Cells constructor.
     * @param $rows
     * @param $cols
     */
    public function __construct($rows, $cols)
    {
        $this->rows = $rows;
        $this->cols = $cols;
        $this->currentGridArray = $this->initGridArray();
    }
    
    /**
     * @return string
     */
    public function init()
    {
        $class = "ocean";
        
        $battleships = new Battleships($this->rows, $this->cols);
        $battleships->initShips();
    
        $table = "<table class=\"table\">\n";
        
        $table .= "<thead>\n";
        $table .= "<th></th>\n";
        $table .= "<th>A</th>\n";
        $table .= "<th>B</th>\n";
        $table .= "<th>C</th>\n";
        $table .= "<th>D</th>\n";
        $table .= "<th>E</th>\n";
        $table .= "<th>F</th>\n";
        $table .= "<th>G</th>\n";
        $table .= "<th>H</th>\n";
        $table .= "<th>I</th>\n";
        $table .= "<th>J</th>\n";
        $table .= "</thead>\n";
        
        $table .= "<tbody>\n";
        
        for ($table_row = 1; $table_row <= 10; $table_row++)
        {
            $table .= "<tr> \n";
            $table .= "<td>$table_row</td> \n";
    
            for ($table_col = 1; $table_col <= 10; $table_col++)
            {
                // $table_p = $table_col * $table_row;
    
                $table .= "<td class=\"$class\">-</td> \n";
            }
            $table .= "</tr> \n";
        }
        
        $table .= "</tbody>";
        $table .= "</table>";
        
        return $table;
    }
    
    /**
     * @return array
     */
    public function initGridArray()
    {
        $this->setGridArray([
            1  => ['A' => []],
            2  => ['B' => []],
            3  => ['C' => []],
            4  => ['D' => []],
            5  => ['E' => []],
            6  => ['F' => []],
            7  => ['G' => []],
            8  => ['H' => []],
            9  => ['I' => []],
            10 => ['J' => []],
        ]);
        
        for ($table_row = 1; $table_row <= 10; $table_row++)
        {
            for ($table_col = 1; $table_col <= 10; $table_col++)
            {
                $table_p = $table_col * $table_row;
                array_push(
                    $this->gridArray[ $table_row ][ key($this->gridArray[ $table_row ]) ], $table_p
                );
            }
        }
        
        return $this->getGridArray();
    }
    
    /**
     * @return array
     */
    public function getGridArray(): array
    {
        return $this->gridArray;
    }
    
    /**
     * @param array $gridArray
     */
    public function setGridArray(array $gridArray)
    {
        $this->gridArray = $gridArray;
    }
}