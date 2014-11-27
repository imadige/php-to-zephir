<?php
return array(
    // [precedence, associativity] where for the latter -1 is %left, 0 is %nonassoc and 1 is %right
    'Expr_BinaryOp_Pow'            => array( 0,  1),
    'Expr_BitwiseNot'              => array( 1,  1),
    'Expr_PreInc'                  => array( 1,  1),
    'Expr_PreDec'                  => array( 1,  1),
    'Expr_PostInc'                 => array( 1, -1),
    'Expr_PostDec'                 => array( 1, -1),
    'Expr_UnaryPlus'               => array( 1,  1),
    'Expr_UnaryMinus'              => array( 1,  1),
    'Expr_Cast_Int'                => array( 1,  1),
    'Expr_Cast_Double'             => array( 1,  1),
    'Expr_Cast_String'             => array( 1,  1),
    'Expr_Cast_Array'              => array( 1,  1),
    'Expr_Cast_Object'             => array( 1,  1),
    'Expr_Cast_Bool'               => array( 1,  1),
    'Expr_Cast_Unset'              => array( 1,  1),
    'Expr_ErrorSuppress'           => array( 1,  1),
    'Expr_Instanceof'              => array( 2,  0),
    'Expr_BooleanNot'              => array( 3,  1),
    'Expr_BinaryOp_Mul'            => array( 4, -1),
    'Expr_BinaryOp_Div'            => array( 4, -1),
    'Expr_BinaryOp_Mod'            => array( 4, -1),
    'Expr_BinaryOp_Plus'           => array( 5, -1),
    'Expr_BinaryOp_Minus'          => array( 5, -1),
    'Expr_BinaryOp_Concat'         => array( 5, -1),
    'Expr_BinaryOp_ShiftLeft'      => array( 6, -1),
    'Expr_BinaryOp_ShiftRight'     => array( 6, -1),
    'Expr_BinaryOp_Smaller'        => array( 7,  0),
    'Expr_BinaryOp_SmallerOrEqual' => array( 7,  0),
    'Expr_BinaryOp_Greater'        => array( 7,  0),
    'Expr_BinaryOp_GreaterOrEqual' => array( 7,  0),
    'Expr_BinaryOp_Equal'          => array( 8,  0),
    'Expr_BinaryOp_NotEqual'       => array( 8,  0),
    'Expr_BinaryOp_Identical'      => array( 8,  0),
    'Expr_BinaryOp_NotIdentical'   => array( 8,  0),
    'Expr_BinaryOp_BitwiseAnd'     => array( 9, -1),
    'Expr_BinaryOp_BitwiseXor'     => array(10, -1),
    'Expr_BinaryOp_BitwiseOr'      => array(11, -1),
    'Expr_BinaryOp_BooleanAnd'     => array(12, -1),
    'Expr_BinaryOp_BooleanOr'      => array(13, -1),
    'Expr_Ternary'                 => array(14, -1),
    // parser uses %left for assignments, but they really behave as %right
    'Expr_Assign'                  => array(15,  1),
    'Expr_AssignRef'               => array(15,  1),
    'Expr_AssignOp_Plus'           => array(15,  1),
    'Expr_AssignOp_Minus'          => array(15,  1),
    'Expr_AssignOp_Mul'            => array(15,  1),
    'Expr_AssignOp_Div'            => array(15,  1),
    'Expr_AssignOp_Concat'         => array(15,  1),
    'Expr_AssignOp_Mod'            => array(15,  1),
    'Expr_AssignOp_BitwiseAnd'     => array(15,  1),
    'Expr_AssignOp_BitwiseOr'      => array(15,  1),
    'Expr_AssignOp_BitwiseXor'     => array(15,  1),
    'Expr_AssignOp_ShiftLeft'      => array(15,  1),
    'Expr_AssignOp_ShiftRight'     => array(15,  1),
    'Expr_AssignOp_Pow'            => array(15,  1),
    'Expr_BinaryOp_LogicalAnd'     => array(16, -1),
    'Expr_BinaryOp_LogicalXor'     => array(17, -1),
    'Expr_BinaryOp_LogicalOr'      => array(18, -1),
    'Expr_Include'                 => array(19, -1),
);