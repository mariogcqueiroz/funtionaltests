from wsgiref import simple_server
def app(environ, start_response):
    path = environ["PATH_INFO"]
    method = environ["REQUEST_METHOD"]
    data=b""
    if path == "/app":
        data = b"Hello, Web!\n"
    if path == "/app/feedback":

    start_response("200 OK", [
        ("Content-Type", "text/plain"),
        ("Content-Length", str(len(data)))
    ])
    return [data]

if __name__ == '__main__':
    w_s = simple_server.make_server(
        host="",
        port=8000,
        app=app
    )
    w_s.serve_forever()