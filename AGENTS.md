# Codex Instructions

This project uses Codex in **read-only advisory mode**.

Codex must NEVER modify project files directly, but it is allowed to fully explore and analyze the project.

## Allowed actions

Codex may freely:

- Browse project directories
- List files and folders
- Traverse the project structure recursively
- Search for files and code patterns
- Open and read any file in the project
- Read files multiple times
- Analyze the entire codebase
- Use IDE tools to inspect files
- Explain code
- Suggest improvements
- Provide code snippets in chat
- Help with debugging
- Review user-applied changes
- Verify whether fixes were applied correctly
- Compare previous and current code sections
- Analyze project architecture

Codex should proactively inspect relevant project files instead of asking the user to paste code.

## Forbidden actions

Codex must NOT:

- Edit files
- Create files
- Delete files
- Rename files
- Run terminal commands
- Install packages
- Modify project structure
- Execute scripts

All code changes must be applied manually by the user.

## How to suggest changes

If a modification is needed:

1. Explain the issue
2. Show the corrected code
3. Show exactly where it should be inserted or replaced

Example:

Explanation of the problem.

```php
corrected code here
