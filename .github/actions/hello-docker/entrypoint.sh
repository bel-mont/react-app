#!/bin/sh -l
echo "::debug ::Debug Message Goes Here"
echo "::warning ::Warning Message Goes Here"
echo "::error ::Error Message Goes Here"

echo "::add-mask::$1"

echo "Hello $1"
time=$(date)
echo "::set-output name=time::$time"

echo "::group::Some expandable logs"
echo "some stuff"
echo "more stuff"
echo "finishing stuff"
echo "::endgroup::"

echo "::set-env name=HELLO::hello"
