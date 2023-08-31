# ZERO-lab
It is a laboratory for practicing rce, ssrf, xss, sqli and lfi vulnerabilities, which is made for beginners. Run this lab with the help of xampp

What vulnerabilities does this lab have
----------------------------------------------------
    sql injection
    Remote code execution(RCE)
    Cross-site scripting (XSS)
    Server-side request forgery (SSRF)
    Local File Inclusion(LFI)

cheat sheet
----------------------------------------------------
    sqli -> payload = '
    rce -> payload = 127.0.0.1 $ ls
    xss -> payload = <script>alert(1)</script>
    ssrf -> payload = /etc/passwd
    lfi -> /../../etc/passwd 
