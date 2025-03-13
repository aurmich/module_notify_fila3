# Database Issues and Solutions

## InnoDB Engine Error
- **Error**: `Unknown storage engine 'InnoDB'`
- **Context**: Occurs when querying `teams` table
- **Possible Causes**:
  1. InnoDB engine not enabled in MySQL
  2. MySQL configuration issues
  3. Corrupted MySQL installation

## Diagnostic Tools
1. Check MySQL Engine Status:
```sql
SHOW ENGINES;
```

2. Check Table Engine:
```sql
SHOW TABLE STATUS WHERE Name = 'teams';
```

3. Check MySQL Configuration:
```bash
mysql --help --verbose | grep my.cnf
```

## Solutions
1. Enable InnoDB:
   - Edit my.cnf
   - Ensure these lines exist:
     ```ini
     [mysqld]
     default-storage-engine=InnoDB
     ```

2. Repair MySQL:
```bash
mysqlcheck -r database_name
```

3. Verify Installation:
```bash
mysqld --verbose --help | grep -A 1 "Default options"
```

## Prevention
- Always include engine checks in deployment scripts
- Add pre-deployment database validation
- Monitor MySQL error logs regularly
