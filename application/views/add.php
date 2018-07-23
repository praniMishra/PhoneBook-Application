<div class="main">


    <table>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Phone Number</th>
          <th>Date of Birth</th>
          <th>Address</th>
        </tr>
        <tr ng-repeat="data in usersList">
          <td>{{ data.first_name }}</td>
          <td>{{ data.last_name }}</td>
          <td>{{ data.email }}</td>
          <td>{{data.phone}}</td>
          <td>{{data.dob}}</td>
          <td>{{data.address}}</td>
        </tr>
    </table>
  </div>
