# Imap_parser.php
IMAP mailbox parser using PHP &amp; return Array or JSON.

- data:
	- email:
		- hostname
		- username
		- password
	- pagination:
		- sort
		- limit
		- offset
	
- result:
	- status
	- email
	- count
	- inbox:
		- id
		- subject
		- from
		- email
		- date
		- message
		- image
	- pagination
		- sort
		- limit
		- offset
			- back
			- next
      
<h3>Sample:</h3>
<pre>&lt;?php

// include Imap_parser class
include_once('lib/Imap_parser.php');

// create Imap_parser Object
$email = new Imap_parser();

// data
$data = array(
    // email account
    'email' =&gt; array(
        'hostname' =&gt; '{mail.ibacor.com:143/notls}INBOX',
        'username' =&gt; 'me@ibacor.com',
        'password' =&gt; 'omt3l0l3t0m'    
    ),
    // inbox pagination
    'pagination' =&gt; array(
        'sort' =&gt; 'ASC', // or DESC
        'limit' =&gt; 3,
        'offset' =&gt; 9
    )
);

// get inbox. Array
$result = $email-&gt;inbox($data);

// Array
print_r($result);

// JSON
// echo json_encode($result);</pre>

<h3>Result:</h3>
<pre>Array
(
    [status] => success
    [email] => me@ibacor.com
    [count] => 113
    [inbox] => Array
        (
            [0] => Array
                (
                    [id] => 10
                    [subject] => Re: [bachors/jQuery-Youtube-Channels-Playlist]
                    [from] => anu
                    [email] => anu@hotmail.it
                    [date] => Thu, 24 Nov 2016 11:12:02 +0000
                    [message] => Hi, I'm anu on github.
                    [image] => data:image/jpeg;base64,...
                )

            [1] => Array
                (
                    ...
                )

            [2] => Array
                (
                    ...
                )

        )

    [pagination] => Array
        (
            [sort] => ASC
            [limit] => 3
            [offset] => Array
                (
                    [back] => 6
                    [next] => 12
                )

        )

)
</pre>

<h3><a href="https://www.youtube.com/watch?v=F1QMvHzoOwA">DEMO</a></h3>
