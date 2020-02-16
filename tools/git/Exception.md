1. Failed to connect to github.com port 443: Timed out
    - 如果无法解决，换用SSH方式来传输数据.

2. error: RPC failed; curl 56 OpenSSL SSL_read: SSL_ERROR_SYSCALL, errno 10054
    - 这主要是安全设置问题.
        - git config  --global   http.sslVerify "false"

3. error: RPC failed; curl 18 transfer closed with outstanding read data remaining
    - R:项目太久了，tag文件资源太大