<?php
// Heading
$_['heading_title']    = 'IATAI Secure Acceptance';

// Text 
$_['text_payment']     = 'Payment';
$_['text_iatai']       = '<a onclick="window.open(\'http://www.iatai.com/\');"><img src="view/image/payment/iatai.png" alt="IATAI Secure Acceptance" title="IATAI" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_success']     = 'Settings updated';   
$_['text_pay']         = 'IATAI Secure Acceptance';
$_['text_card']        = 'Online Payments';

// Entry
$_['entry_profileid']  = 'Profile ID:';
$_['help_profileid']   = 'Id of your profile provided by IATAI.';
$_['entry_accesskey']  = 'Access Key:';
$_['help_accesskey']   = 'Access Key generated by IATAI.';
$_['entry_secretkey']  = 'Secret Key:';
$_['help_secretkey']   = 'Secret Key generated by IATAI.';
$_['entry_liveurl']    = 'Live Url:';
$_['help_liveurl']     = 'Url to handle live transactions.';
$_['entry_testprofileid']  = 'Test Profile ID:';
$_['help_testprofileid']  = 'Testing Id of your profile provided by IATAI.';
$_['entry_testsecretkey']  = 'Test Secret Key:';
$_['help_testsecretkey']  = 'Access Key generated by IATAI for testing purpose.';
$_['entry_testaccesskey']  = 'Test Access Key:';
$_['help_testaccesskey']  = 'Secret Key generated by IATAI for testing purpose.';
$_['entry_testurl']	= 'Testing Url:';
$_['help_testurl']	= 'Url to handle testing transactions.';

$_['default_liveurl'] = 'https://secureacceptance.allegraplatform.com/CI_Secure_Acceptance/Payment';
$_['default_testurl'] = 'https://test.secureacceptance.allegraplatform.com/CI_Secure_Acceptance/Payment';
$_['default_testprofileid'] = 'ci_gvdt';
$_['default_testaccesskey'] = 'cba48ce64b093b5fa8c65181eb5dcc7c';
$_['default_testsecretkey'] = '24d2d873eb06ab744b4986635df84c3e4d57b91aa626daf454a9cb4992a70560d721179ea24d9eb4271a799dbd9b2282181994c4c74041a4bb190a5dd11a5a10517c5086eafe193468f8461000c687110d4';

$_['entry_confirmurl']	= 'WSDL Web Service Url:';
$_['help_confirmurl']	= 'URL used to verify the Transaction state';
$_['entry_testconfirmurl']  = 'Test WSDL Web Service';

$_['entry_confirmuserpass']  = 'User & Password for WSDL Web Service';
$_['help_testconfirmurl']  = 'URL used to verify the Transaction state in Test Mode';
$_['help_confirmuserpass']  = 'User & password provided by Iatai';
$_['default_confirmurl'] = 'https://secure.allegraplatform.com/GatewayIatai/IPPG?WSDL';
$_['default_testconfirmurl'] = 'http://pruebas.allegraplatform.com/GatewayIatai/IPPG?wsdl';
$_['default_testconfirmuser'] = 'cert';
$_['default_testconfirmpass'] = 'cert';
//$_['entry_order_status_expired'] = 'Order status after payment is expired:';
//$_['help_order_status_expired'] = 'This is the state the order gets when the transaction is EXPIRED';Url:';
$_['entry_test']        = 'Checkout Mode:';
$_['help_test']        = 'Use this option to switch between transactions options.';
$_['entry_test_on']     = 'Test';
$_['entry_test_off']    = 'Live';

$_['entry_order_status_accepted'] = 'Order status after payment accepted:';
$_['help_order_status_accepted'] = 'This is the state the order gets when the transaction is ACCEPTED.';
$_['entry_order_status_pending'] = 'Order status after when payment is pending:';
$_['help_order_status_pending'] = 'This is the state the order gets when the transaction is PENDING.';
$_['entry_order_status_declined'] = 'Order status after payment is declined:';
$_['help_order_status_declined'] = 'This is the state the order gets when the transaction is DECLINED.';
$_['entry_order_status_canceled'] = 'Order status after payment is canceled:';
$_['help_order_status_canceled'] = 'This is the state the order gets when the transaction is CANCELED.';
$_['entry_order_status_failed'] = 'Order status after payment is failed:';
$_['help_order_status_failed'] = 'This is the state the order gets when the transaction FAILED.';

$_['entry_currency']     = 'Currency : ';
$_['entry_language']     = 'Payment Platform language :<br /><span class="help">default : EN </span>';

$_['entry_status']       = 'Module Status:';
$_['help_status']       = 'Use this option to enable/disable the payment method.';
$_['entry_sort_order']   = 'Ordering:';
$_['help_sort_order']   = 'Use this option to order this payment method with other methods in your store.';

// Error
$_['error_permission']  = "You haven't permission !";
$_['error_profileid']   = 'Profile ID is empty!';
$_['error_accesskey']   = 'Access key is empty!';
$_['error_secretkey']   = 'Secret key is empty!';
$_['error_liveurl']		= 'Url can´t be empty!';
$_['error_confirmurl']  = 'Url can´t be empty!';
$_['error_confirmuserpass']  = 'User & password can`t be empty';



?>