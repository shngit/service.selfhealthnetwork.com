<?php
/**
 * SAML 2.0 remote IdP metadata for simpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://rnd.feide.no/content/idp-remote-metadata-reference
 */

/*
 * Guest IdP. allows users to sign up and register. Great for testing!
 */
$metadata['https://openidp.feide.no'] = array(
	'name' => array(
		'en' => 'Feide OpenIdP - guest users',
		'no' => 'Feide Gjestebrukere',
	),
	'description'          => 'Here you can login with your account on Feide RnD OpenID. If you do not already have an account on this identity provider, you can create a new one by following the create new account link and follow the instructions.',

	'SingleSignOnService'  => 'https://openidp.feide.no/simplesaml/saml2/idp/SSOService.php',
	'SingleLogoutService'  => 'https://openidp.feide.no/simplesaml/saml2/idp/SingleLogoutService.php',
	'certFingerprint'      => 'c9ed4dfb07caf13fc21e0fec1572047eb8a7a4cb'
);







$metadata['http://testing.bhappier.net'] = array(
		'name' => array(
				'en' => 'bhappier - guest users',
				'no' => 'bhappier - guest users',
		),
		'SingleSignOnService'  => 'http://testing.bhappier.net/simplesamlphp/www/saml2/idp/SSOService.php',
		'SingleLogoutService'  => 'http://testing.bhappier.net/simplesamlphp/www/saml2/idp/SingleLogoutService.php',
		'certFingerprint'      => 'FD9F6F6B2677DDA5058AA3FA1EDD554A9CA7C9F2',

);


