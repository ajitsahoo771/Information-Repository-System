%{

#include<stdio.h>

#include<stdlib.h>

%}


%token DIGIT LETTER UND NL


%%

stmt: variable NL
 {
printf("valid identifiers\n"); 
exit(0);
}
;

variable: LETTER alphanumeric
;
alphanumeric: LETTER alphanumeric | DIGIT alphanumeric | UND alphanumeric | LETTER | DIGIT | UND
;


%%


int yyerror(char *msg)

{
 
 printf("Invalid variable\n");

 exit(0);

}


main()

{
 printf("enter the variable: \n");

 yyparse();

}



Output:

csl202@CEN01040:~/Desktop$ yacc -d vid.y

csl202@CEN01040:~/Desktop$ lex vid.l

csl202@CEN01040:~/Desktop$ cc y.tab.c lex.yy.c -ly -ll

csl202@CEN01040:~/Desktop$ ./a.out


