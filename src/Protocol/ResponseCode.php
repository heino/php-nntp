<?php

/**
 * 
 * 
 * <pre>
 * +-----------------------------------------------------------------------+
 * |                                                                       |
 * | W3C� SOFTWARE NOTICE AND LICENSE                                      |
 * | http://www.w3.org/Consortium/Legal/2002/copyright-software-20021231   |
 * |                                                                       |
 * | This work (and included software, documentation such as READMEs,      |
 * | or other related items) is being provided by the copyright holders    |
 * | under the following license. By obtaining, using and/or copying       |
 * | this work, you (the licensee) agree that you have read, understood,   |
 * | and will comply with the following terms and conditions.              |
 * |                                                                       |
 * | Permission to copy, modify, and distribute this software and its      |
 * | documentation, with or without modification, for any purpose and      |
 * | without fee or royalty is hereby granted, provided that you include   |
 * | the following on ALL copies of the software and documentation or      |
 * | portions thereof, including modifications:                            |
 * |                                                                       |
 * | 1. The full text of this NOTICE in a location viewable to users       |
 * |    of the redistributed or derivative work.                           |
 * |                                                                       |
 * | 2. Any pre-existing intellectual property disclaimers, notices,       |
 * |    or terms and conditions. If none exist, the W3C Software Short     |
 * |    Notice should be included (hypertext is preferred, text is         |
 * |    permitted) within the body of any redistributed or derivative      |
 * |    code.                                                              |
 * |                                                                       |
 * | 3. Notice of any changes or modifications to the files, including     |
 * |    the date changes were made. (We recommend you provide URIs to      |
 * |    the location from which the code is derived.)                      |
 * |                                                                       |
 * | THIS SOFTWARE AND DOCUMENTATION IS PROVIDED "AS IS," AND COPYRIGHT    |
 * | HOLDERS MAKE NO REPRESENTATIONS OR WARRANTIES, EXPRESS OR IMPLIED,    |
 * | INCLUDING BUT NOT LIMITED TO, WARRANTIES OF MERCHANTABILITY OR        |
 * | FITNESS FOR ANY PARTICULAR PURPOSE OR THAT THE USE OF THE SOFTWARE    |
 * | OR DOCUMENTATION WILL NOT INFRINGE ANY THIRD PARTY PATENTS,           |
 * | COPYRIGHTS, TRADEMARKS OR OTHER RIGHTS.                               |
 * |                                                                       |
 * | COPYRIGHT HOLDERS WILL NOT BE LIABLE FOR ANY DIRECT, INDIRECT,        |
 * | SPECIAL OR CONSEQUENTIAL DAMAGES ARISING OUT OF ANY USE OF THE        |
 * | SOFTWARE OR DOCUMENTATION.                                            |
 * |                                                                       |
 * | The name and trademarks of copyright holders may NOT be used in       |
 * | advertising or publicity pertaining to the software without           |
 * | specific, written prior permission. Title to copyright in this        |
 * | software and any associated documentation will at all times           |
 * | remain with copyright holders.                                        |
 * |                                                                       |
 * +-----------------------------------------------------------------------+
 * </pre>
 *
 * @package    Net_NNTP
 * @author     Heino H. Gehlsen <heino@gehlsen.dk>
 * @copyright  2002-2017 Heino H. Gehlsen <heino@gehlsen.dk>. All Rights Reserved.
 * @license    http://www.w3.org/Consortium/Legal/2002/copyright-software-20021231 W3C� SOFTWARE NOTICE AND LICENSE
 * @version    GIT: $Id$
 * @link       http://pear.php.net/package/Net_NNTP
 * @see        
 */

namespace Net\NNTP\Protocol;

/**
 * 
 *
 * @package    Net_NNTP
 * @author     Heino H. Gehlsen <heino@gehlsen.dk>
 * @version    package: @package_version@ (@package_state@)
 * @internal
 * @see        Net_NNTP_Protocol_Client
 */
class Responsecode
	{

	/* Constants: Connection */

	/**
	 * 'Server ready - posting allowed' (RFC977)
	 *
	 * @access     public
	 */
	const READY_POSTING_ALLOWED = 200;

	/**
	 * 'Server ready - no posting allowed' (RFC977)
	 *
	 * @access     public
	 */
	const READY_POSTING_PROHIBITED = 201;


	/**
	 * 'Closing connection - goodbye!' (RFC977)
	 *
	 * @access     public
	 * @since      ?
	 */
	//const DISCONNECTING_REQUESTED = 205;   ///// goodbye

	/**
	 * 'Service discontinued' (RFC977)
	 *
	 * @access     public
	 * @since      ?
	 */
	//const DISCONNECTING_FORCED = 400;   ///// unavailable / discontinued


	/**
	 * 'Slave status noted' (RFC977)
	 *
	 * @access     public
	 */
	const SLAVE_RECOGNIZED = 202;




	/* Constants: Common errors */



	/**
	 * 'Command not recognized' (RFC977)
	 *
	 * @access     public
	 */
	const UNKNOWN_COMMAND = 500;

	/**
	 * 'Command syntax error' (RFC977)
	 *
	 * @access     public
	 */
	const SYNTAX_ERROR = 501;

	/**
	 * 'Access restriction or permission denied' (RFC977)
	 *
	 * @access     public
	 */
	const NOT_PERMITTED = 502;

	/**
	 * 'Program fault - command not performed' (RFC977)
	 *
	 * @access     public
	 */
	const NOT_SUPPORTED = 503;



	/* Constants: Group selection */



	/**
	 * 'Group selected' (RFC977)
	 *
	 * @access     public
	 */
	const GROUP_SELECTED = 211;

	/**
	 * 'No such news group' (RFC977)
	 *
	 * @access     public
	 */
	const NO_SUCH_GROUP = 411;



	/* Constants: Article retrieval */



	/**
	 * 'Article retrieved - head and body follow' (RFC977)
	 *
	 * @access     public
	 */
	const ARTICLE_FOLLOWS = 220;

	/**
	 * 'Article retrieved - head follows' (RFC977)
	 *
	 * @access     public
	 */
	const HEAD_FOLLOWS = 221;

	/**
	 * 'Article retrieved - body follows' (RFC977)
	 *
	 * @access     public
	 */
	const BODY_FOLLOWS = 222;

	/**
	 * 'Article retrieved - request text separately' (RFC977)
	 *
	 * @access     public
	 */
	const ARTICLE_SELECTED = 223;





	/**
	 * 'No newsgroup has been selected' (RFC977)
	 *
	 * @access     public
	 */
	const NO_GROUP_SELECTED = 412;


	/**
	 * 'No current article has been selected' (RFC977)
	 *
	 * @access     public
	 */
	const NO_ARTICLE_SELECTED = 420;

	/**
	 * 'No next article in this group' (RFC977)
	 *
	 * @access     public
	 */
	const NO_NEXT_ARTICLE = 421;

	/**
	 * 'No previous article in this group' (RFC977)
	 *
	 * @access     public
	 */
	const NO_PREVIOUS_ARTICLE = 422;


	/**
	 * 'No such article number in this group' (RFC977)
	 *
	 * @access     public
	 */
	const NO_SUCH_ARTICLE_NUMBER = 423;

	/**
	 * 'No such article found' (RFC977)
	 *
	 * @access     public
	 */
	const NO_SUCH_ARTICLE_ID = 430;




	/* Constants: Transferring */



	/**
	 * 'Send article to be transferred' (RFC977)
	 *
	 * @access     public
	 */
	const TRANSFER_SEND = 335;

	/**
	 * 'Article transferred ok' (RFC977)
	 *
	 * @access     public
	 */
	const TRANSFER_SUCCESS = 235;

	/**
	 * 'Article not wanted - do not send it' (RFC977)
	 *
	 * @access     public
	 */
	const TRANSFER_UNWANTED = 435;

	/**
	 * 'Transfer failed - try again later' (RFC977)
	 *
	 * @access     public
	 */
	const TRANSFER_FAILURE = 436;

	/**
	 * 'Article rejected - do not try again' (RFC977)
	 *
	 * @access     public
	 */
	const TRANSFER_REJECTED = 437;



	/* Constants: Posting */



	/**
	 * 'Send article to be posted' (RFC977)
	 *
	 * @access     public
	 */
	const POSTING_SEND = 340;

	/**
	 * 'Article posted ok' (RFC977)
	 *
	 * @access     public
	 */
	const POSTING_SUCCESS = 240;

	/**
	 * 'Posting not allowed' (RFC977)
	 *
	 * @access     public
	 */
	const POSTING_PROHIBITED = 440;

	/**
	 * 'Posting failed' (RFC977)
	 *
	 * @access     public
	 */
	const POSTING_FAILURE = 441;




	/* Constants: Authorization */



	/**
	 * 'Authorization required for this command' (RFC2980)
	 *
	 * @access     public
	 */
	const AUTHORIZATION_REQUIRED = 450;

	/**
	 * 'Continue with authorization sequence' (RFC2980)
	 *
	 * @access     public
	 */
	const AUTHORIZATION_CONTINUE = 350;

	/**
	 * 'Authorization accepted' (RFC2980)
	 *
	 * @access     public
	 */
	const AUTHORIZATION_ACCEPTED = 250;

	/**
	 * 'Authorization rejected' (RFC2980)
	 *
	 * @access     public
	 */
	const AUTHORIZATION_REJECTED = 452;




	/* Constants: Authentication */



	/**
	 * 'Authentication required' (RFC2980)
	 *
	 * @access     public
	 */
	const AUTHENTICATION_REQUIRED = 480;

	/**
	 * 'More authentication information required' (RFC2980)
	 *
	 * @access     public
	 */
	const AUTHENTICATION_CONTINUE = 381;

	/**
	 * 'Authentication accepted' (RFC2980)
	 *
	 * @access     public
	 */
	const AUTHENTICATION_ACCEPTED = 281;

	/**
	 * 'Authentication rejected' (RFC2980)
	 *
	 * @access     public
	 */
	const AUTHENTICATION_REJECTED = 482;



	/* Constants: Misc */



	/**
	 * 'Help text follows' (Draft)
	 *
	 * @access     public
	 */
	const HELP_FOLLOWS = 100;

	/**
	 * 'Capabilities list follows' (Draft)
	 *
	 * @access     public
	 */
	const CAPABILITIES_FOLLOW = 101;

	/**
	 * 'Server date and time' (Draft)
	 *
	 * @access     public
	 */
	const SERVER_DATE = 111;

	/**
	 * 'Information follows' (Draft)
	 *
	 * @access     public
	 */
	const GROUPS_FOLLOW = 215;

	/**
	 * 'Overview information follows' (Draft)
	 *
	 * @access     public
	 */
	const OVERVIEW_FOLLOWS = 224;

	/**
	 * 'Headers follow' (Draft)
	 *
	 * @access     public
	 */
	const HEADERS_FOLLOW = 225;

	/**
	 * 'List of new articles follows' (Draft)
	 *
	 * @access     public
	 */
	const NEW_ARTICLES_FOLLOW = 230;

	/**
	 * 'List of new newsgroups follows' (Draft)
	 *
	 * @access     public
	 */
	const NEW_GROUPS_FOLLOW = 231;

	/**
	 * 'The server is in the wrong mode; the indicated capability should be used to change the mode' (Draft)
	 *
	 * @access     public
	 */
	const WRONG_MODE = 401;

	/**
	 * 'Internal fault or problem preventing action being taken' (Draft)
	 *
	 * @access     public
	 */
	const INTERNAL_FAULT = 403;

	/**
	 * 'Command unavailable until suitable privacy has been arranged' (Draft)
	 *
	 * (the client must negotiate appropriate privacy protection on the connection.
	 * This will involve the use of a privacy extension such as [NNTP-TLS].)
	 *
	 * @access     public
	 * @since      ?
	 */
	//const ENCRYPTION_REQUIRED = 483;

	/**
	 * 'Error in base64-encoding [RFC3548] of an argument' (Draft)
	 *
	 * @access     public
	 */
	const BASE64_ENCODING_ERROR = 504;
}
