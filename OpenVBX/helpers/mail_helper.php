<?php
/**
 * "The contents of this file are subject to the Mozilla Public License
 *  Version 1.1 (the "License"); you may not use this file except in
 *  compliance with the License. You may obtain a copy of the License at
 *  http://www.mozilla.org/MPL/
 
 *  Software distributed under the License is distributed on an "AS IS"
 *  basis, WITHOUT WARRANTY OF ANY KIND, either express or implied. See the
 *  License for the specific language governing rights and limitations
 *  under the License.

 *  The Original Code is OpenVBX, released June 15, 2010.

 *  The Initial Developer of the Original Code is Twilio Inc.
 *  Portions created by Twilio Inc. are Copyright (C) 2010.
 *  All Rights Reserved.

 * Contributor(s):
 **/
	
function openvbx_mail($recipient, $subject, $message, $from = 'OpenVBX')
{
    $domain = $_SERVER['HTTP_HOST'];
    $headers = "From: $from <do-not-reply@$domain>";
	error_log('OpenVBX Mailing...');
	error_log("Recipient: $recipient \nFrom: [$from]\nSubject: $subject\nHeaders: $headers\nContent:\n$message");
    return mail($recipient, "[$from] " . $subject, $message, $headers);
}