<style>
	/* info (hed, dek, source, credit) */
.rg-container {
  font-family: 'Lato', Helvetica, Arial, sans-serif;
  font-size: 16px;
  line-height: 1.4;
  margin: 0;
  padding: 1em 0.5em;
  color: #222;
}
.rg-header {
  margin-bottom: 1em;
  text-align: left;
}

.rg-header > * {
  display: block;
}
.rg-hed {
  font-weight: bold;
  font-size: 1.4em;
}
.rg-dek {
  font-size: 1em;
}

.rg-source {
  margin: 0;
  font-size: 0.75em;
  text-align: right;
}
.rg-source .pre-colon {
  text-transform: uppercase;
}

.rg-source .post-colon {
  font-weight: bold;
}

/* table */
table.rg-table {
  width: 100%;
  margin-bottom: 0.5em;
  font-size: 1em;
  border-collapse: collapse;
  border-spacing: 0;
}
table.rg-table tr {
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
  text-align: left;
  color: #333;
}
table.rg-table thead {
  border-bottom: 3px solid #ddd;
}
table.rg-table tr {
  border-bottom: 1px solid #ddd;
  color: #222;
}
table.rg-table tr.highlight {
  background-color: #dcf1f0 !important;
}
table.rg-table.zebra tr:nth-child(even) {
  background-color: #f6f6f6;
}
table.rg-table th {
  font-weight: bold;
  padding: 0.35em;
  font-size: 0.9em;
}
table.rg-table td {
  padding: 0.35em;
  font-size: 0.9em;
}
table.rg-table .highlight td {
  font-weight: bold;
}
table.rg-table th.number,
td.number {
  text-align: right;
}

/* media queries */
@media screen and (max-width: 600px) {
  .rg-container {
    max-width: 600px;
    margin: 0 auto;
  }
  table.rg-table {
    width: 100%;
  }
  table.rg-table tr.hide-mobile,
  table.rg-table th.hide-mobile,
  table.rg-table td.hide-mobile {
    display: none;
  }
  table.rg-table thead {
    display: none;
  }
  table.rg-table tbody {
    width: 100%;
  }
  table.rg-table tr,
  table.rg-table th,
  table.rg-table td {
    display: block;
    padding: 0;
  }
  table.rg-table tr {
    border-bottom: none;
    margin: 0 0 1em 0;
    padding: 0.5em;
  }
  table.rg-table tr.highlight {
    background-color: inherit !important;
  }
  table.rg-table.zebra tr:nth-child(even) {
    background-color: transparent;
  }
  table.rg-table.zebra td:nth-child(even) {
    background-color: #f6f6f6;
  }
  table.rg-table tr:nth-child(even) {
    background-color: transparent;
  }
  table.rg-table td {
    padding: 0.5em 0 0.25em 0;
    border-bottom: 1px dotted #ccc;
    text-align: right;
  }
  table.rg-table td[data-title]:before {
    content: attr(data-title);
    font-weight: bold;
    display: inline-block;
    content: attr(data-title);
    float: left;
    margin-right: 0.5em;
    font-size: 0.95em;
  }
  table.rg-table td:last-child {
    padding-right: 0;
    border-bottom: 2px solid #ccc;
  }
  table.rg-table td:empty {
    display: none;
  }
  table.rg-table .highlight td {
    background-color: inherit;
    font-weight: normal;
  }
}

</style>
<div class='rg-container'>
	<table class='rg-table' summary='Hed'>
		<caption class='rg-header'>
			<span class='rg-hed'>Hed</span>
			<span class='rg-dek'>Dek goes here.</span>
		</caption>
		<thead>
			<tr>
				<th class='text '>Name</th>
				<th class='text '>City</th>
				<th class='text '>Price</th>
				<th class='number '>Rating</th>
			</tr>
		</thead>
		<tbody>
			
				<tr class=''>
					<td class='text ' data-title='Name'>Superette</td>
					<td class='text ' data-title='City'>Holliston</td>
					<td class='text ' data-title='Price'>$8.00</td>
					<td class='number ' data-title='Rating'>4.5</td>
				</tr>
			

				<tr class=''>
					<td class='text ' data-title='Name'>Tasty Treat</td>
					<td class='text ' data-title='City'>Ashland</td>
					<td class='text ' data-title='Price'>$5.00</td>
					<td class='number ' data-title='Rating'>2.0</td>
				</tr>
			

				<tr class=''>
					<td class='text ' data-title='Name'>Big Fresh</td>
					<td class='text ' data-title='City'>Framingham</td>
					<td class='text ' data-title='Price'>$9.00</td>
					<td class='number ' data-title='Rating'>5.0</td>
				</tr>
			

				<tr class=''>
					<td class='text ' data-title='Name'>Seta's Cafe</td>
					<td class='text ' data-title='City'>Watertown</td>
					<td class='text ' data-title='Price'>$7.50</td>
					<td class='number ' data-title='Rating'>3.8</td>
				</tr>
			
		</tbody>
	</table>
	<div class='rg-source'>
		<span class='pre-colon'>SOURCE</span>: <span class='post-colon'>Sources</span>
	</div>
</div>

