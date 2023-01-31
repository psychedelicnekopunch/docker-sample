
package main


import (
	"fmt"
	"github.com/gin-gonic/gin"
	"github.com/docker-sample/src"
)


func main() {
	// fmt.Print("hello world!!\n")
	// fmt.Print("docker-sample/golang\n")
	s := new(src.Sample)
	fmt.Print(s.Test())

	r := gin.Default()

	r.GET("/", func(c *gin.Context) {
		c.JSON(200, gin.H{
			"message": "hello world! docker-sample/golang-air",
		})
	})

	// r.Run() // listen and serve on 0.0.0.0:8080 (for windows "localhost:8080")
	r.Run(":8080")
}
