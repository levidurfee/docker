package main

import (
	"github.com/levidurfee/gowafp"
	"log"
	"net/http"
	"os"
)

func main() {
	http.Handle("/", gowafp.AnalyzeRequest(gowafp.PhpHandler(os.Getenv("SCRIPT"), os.Getenv("PROTOCOL"), os.Getenv("ADDRESS"))))

	log.Fatal(http.ListenAndServe(":8080", nil))
}
