function Sum(a, b)
{
  return a+b;
}

function Factorial(a)
{
    if ((a==1) || (a==2))
    {
      return a;
    }
    else
    {
      return a*factorial(a-1);
    }      
}