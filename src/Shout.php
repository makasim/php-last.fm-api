<?php

/** Represents a shout.
 *
 * @package	php-lastfm-api
 * @author  Felix Bruns <felixbruns@web.de>
 * @version	1.0
 */
class Shout {
	/** Shout author.
	 *
	 * @var string
	 * @access private
	 */
	private $auhtor;

	/** Shout date (unix timestamp).
	 *
	 * @var integer
	 * @access private
	 */
	private $date;

	/** Shout text body.
	 *
	 * @var string
	 * @access private
	 */
	private $text;

	/** Create a Shout object.
	 *
	 * @param string	$author	Shout author.
	 * @param integer	$date	Shout date (unix timestamp).
	 * @param string	$text	Shout body.
	 *
	 * @access public
	 */
	public function __construct($auhtor, $date, $text){
		$this->auhtor = $author;
		$this->date   = $date;
		$this->text   = $text;
	}

	/** Returns the shouts author.
	 *
	 * @return	string	An author name.
	 * @access public
	 */
	public function getAuthor(){
		return $this->author;
	}

	/** Returns the shouts date.
	 *
	 * @return	integer	A date (unix timestamp).
	 * @access public
	 */
	public function getDate(){
		return $this->date;
	}

	/** Returns the shouts text body.
	 *
	 * @return	string	A text.
	 * @access public
	 */
	public function getText(){
		return $this->text;
	}

	/** Create a Shout object from a SimpleXMLElement.
	 *
	 * @param	SimpleXMLElement	$xml	A SimpleXMLElement.
	 * @return	Venue						A Venue object.
	 *
	 * @static
	 * @access	public
	 * @internal
	 */
	public static function fromSimpleXMLElement(SimpleXMLElement $xml){
		return new Shout(
			Util::toString($xml->auhtor),
			Util::toTimestamp($xml->date),
			Util::toString($xml->body)
		);
	}
}


