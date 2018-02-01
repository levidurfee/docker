package main

import (
	"github.com/levidurfee/gowafp"
	"log"
	"net/http"
)

func main() {
	http.Handle("/", gowafp.AnalyzeRequest(gowafp.PhpHandler("/app/index.php", "tcp", "127.0.0.1:9000")))

	log.Fatal(http.ListenAndServe(":8080", nil))
}
