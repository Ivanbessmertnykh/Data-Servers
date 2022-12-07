<?php
function getMysqli(): mysqli
{
    return new mysqli("db", "ivan", "ivan123321", "site");
}
