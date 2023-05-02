#!/bin/bash
echo Digite a URL
read string
length=`expr length $string`

for ((i=1; i<$lenght+1; i++))
do
n$i=`echo $string | cut -b $i`

done

for ((a=$length; a>=1; a--))
do
echo -n $n$a
done
echo " "
