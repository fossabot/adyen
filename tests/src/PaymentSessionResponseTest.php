<?php
/**
 * Payment session response test
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2019 Pronamic
 * @license   GPL-3.0-or-later
 * @package   Pronamic\WordPress\Pay\Gateways\Adyen
 */

namespace Pronamic\WordPress\Pay\Gateways\Adyen;

/**
 * Payment session response test
 *
 * @author  Remco Tolsma
 * @version 1.0.0
 * @since   1.0.0
 */
class PaymentSessionResponseTest extends \PHPUnit_Framework_TestCase {
	/**
	 * Test payment session response.
	 */
	public function test_payment_session_response() {
		$payment_session_response = new PaymentSessionResponse( 'test' );

		$this->assertEquals( 'test', $payment_session_response->get_payment_session() );
	}
}
