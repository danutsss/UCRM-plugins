<?php

declare(strict_types=1);

namespace MikrotikQueueSync\Data;

class PluginData extends UcrmData
{
    /**
     * @var string
     */
    public $mktip;

    /**
     * @var string
     */
    public $mktusr;

    /**
     * @var string
     */
    public $mktpass;
	
	/**
     * @var integrer
     */
    public $burstThresholdPercentage;
	
	/**
     * @var integrer
     */
    public $burstTime;
	
	/**
     * @var integrer
     */
    public $addQueue;
}
