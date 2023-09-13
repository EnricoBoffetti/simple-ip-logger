# simple-ip-logger
This simple IP Logger:
- Retrieve the IP address of the current user. To do this, it uses the superglobal variable $_SERVER['REMOTE_ADDR'].
- Retrieves the host name of the current user. To do this, use the gethostbyaddr() function.
- Retrieves the user name of the current user. To do this, it uses the superglobal variable $_SERVER['REMOTE_USER'].
- Retrieves the browser name of the current user. To do this, it uses the superglobal variable $_SERVER['HTTP_USER_AGENT'].
- Retrieves the name of the current user's HTTP server. To do this, it uses the superglobal variable $_SERVER['HTTP_HOST'].
- Retrieves the name of the current user's remote host. To do this, use the superglobal variable $_SERVER['REMOTE_HOST'].
- Sends a notification email to the specified recipient. The email contains the IP address, host name, username, browser name, HTTP server name, and remote host name of the current user.
- It redirects the user to another web page. In this case, the user is redirected to my personal GitHub page.
