<?php

class First
{
}

class Second extends First
{
}

class Third extends Second
{
}

var_dump(get_parent_class('Third'));
var_dump(get_parent_class('First'));

/*
 * Result:
string 'Second' (length=6)
boolean false
*/
