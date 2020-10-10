package main

import "testing"

func compute(factory OperatorFactory, a, b int) int {
	op := factory.Create()
	op.SetA(a)
	op.SetB(b)
	return op.Result()
}

func TestOperator(t *testing.T) {
	var factory OperatorFactory

	factory = PlusOperatorFactory{}
	if compute(factory, 1, 2) != 3 {
		t.Fatal("test add factory error")
	}

	factory = MinusOperatorFactory{}
	if compute(factory, 3, 1) != 2 {
		t.Fatal("test minus factory error")
	}
}
