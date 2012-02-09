
== Brief Motivation ==
I forked this project due to similarity on "hacked needs" and shared with same interest 
to build Http handler library. I relicensed this project to GNU GPL version 3. 

== Goal ==
Implements 80% of Python Httplib library

== Introduction ==
A replica of the Python httplib designed for lightweight POST and GET requests in PHP.

== How to Use ==
Current source allows HTTP connections (no SSL) with GET or POST requests::

	$conn = new HTTPConnection('google.com', 80);
	$conn->request('POST', '/', array('q' => 'hi'));

	$response = $conn->getresponse();
	if ($response->status == 200) echo $response->read();

== Limitation ==
  * This is alpha version, use at your own risk
  * Currently No SSL supported

== Credits ==
Thanks to the original author to start this project.
Original-author: David Cramer <dcramer@gmail.com>
Me: Suwandi Tanuwijaya <swndtan@gmail.com>

