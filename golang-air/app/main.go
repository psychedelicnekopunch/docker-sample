
package main


import (
	"fmt"

	"github.com/docker-sample/src"
)


func main() {
	fmt.Print("hello world!!\n")
	fmt.Print("docker-sample/golang\n")
	s := new(src.Sample)
	fmt.Print(s.Test())
}
