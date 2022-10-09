function Table({ rows, setRows }) {
    return (
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>CRN</th>
            <th>Course Name</th>
            <th>Instructor</th>
            <th>Time</th>
            <th>Remove</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>text1.1</td>
            <td>text1.2</td>
            <td>text1.3</td>
            <td>text1.3</td>
            <td>text1.3</td>
            <td>text1.3</td>
          </tr>
        </tbody>
      </table>
    );
  }
  
  export default Table;
  