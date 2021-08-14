package main

import "fmt"

type API interface {
	Say(name string) string
}

func NewApi(t int) API {
	switch t {
	case 1:
		return &hiAPI{}
	case 2:
		return &helloAPI{}
	}
	return nil
}

type hiAPI struct {
}

func (*hiAPI) Say(name string) string {
	return fmt.Sprintf("Hi,%s", name)
}

type helloAPI struct {
}

func (*helloAPI) Say(name string) string {
	return fmt.Sprintf("Hello,%s", name)
}
