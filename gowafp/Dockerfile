FROM golang:1.8
ADD . /app
WORKDIR /app
ENV SCRIPT /app/index.php
ENV PROTOCOL tcp
ENV ADDRESS php:9000
RUN \
    go get github.com/tomasen/fcgi_client && \
    go get github.com/microcosm-cc/bluemonday && \
    go get github.com/levidurfee/gowafp
EXPOSE 8080
CMD ["go", "run", "main.go"]
