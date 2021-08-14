package main

type Operator interface {
	SetA(int)
	SetB(int)
	Result() int
}

type OperatorFactory interface {
	Create() Operator
}

type OperatorBase struct {
	a, b int
}

func (o *OperatorBase) SetA(a int) {
	o.a = a
}

func (o *OperatorBase) SetB(b int) {
	o.b = b
}

//PlusOperatorFactory 是 PlusOperator 的工厂类
type PlusOperatorFactory struct {
}

func (PlusOperatorFactory) Create() Operator {
	//return &PlusOperator{OperatorBase: &OperatorBase{}}
	return &OperatorBase{}
}

type PlusOperator struct {
	*OperatorBase
}

func (o OperatorBase) Result() int {
	return o.a + o.b
}

//减法运算工厂类
type MinusOperatorFactory struct {
}

func (MinusOperatorFactory) Create() Operator {
	return &MinusOperator{OperatorBase: &OperatorBase{}}
}

type MinusOperator struct {
	*OperatorBase
}

func (o MinusOperator) Result() int {
	return o.a - o.b
}
