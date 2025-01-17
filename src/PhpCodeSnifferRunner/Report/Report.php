<?php

declare(strict_types=1);

namespace ISAAC\CodeSnifferBaseliner\PhpCodeSnifferRunner\Report;

class Report
{
    /**
     * @var Totals
     */
    private $totals;
    /**
     * @var FileReport[]
     */
    private $fileReportsByFilename;

    /**
     * @param FileReport[] $fileReportsByFilename
     */
    public function __construct(Totals $totals, array $fileReportsByFilename)
    {
        $this->totals = $totals;
        $this->fileReportsByFilename = $fileReportsByFilename;
    }

    public function getTotals(): Totals
    {
        return $this->totals;
    }

    /**
     * @return FileReport[]
     */
    public function getFileReportsByFilename(): array
    {
        return $this->fileReportsByFilename;
    }
}
