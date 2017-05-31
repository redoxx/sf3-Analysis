<?php
// src/Medical/AnalysisBundle/AntiSpam/OCAntispam.php

namespace Medical\AnalysisBundle\AntiSpam;

class OCAntispam
{
	private $mailer;
	private $locale;
	private $maxlength;

	public function __construct(\Swift_Mailer $mailer, $locale, $maxlength)
	{
		$this->mailer    = $mailer;
    	$this->locale    = $locale;
    	$this->minLength = (int) $minLength;
	}

	/**
	* Check either the text is spam or no
	*
	* @param string $text
	* @return bool
	*/
	public function isSpam($text)
	{
		return strlen($text) < $this->minLength;
	}
}