<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">

<html>
        <head> 
                <title>CV</title>
        </head>

        <body>
        	<h3 align="center">CV</h3>
				<table border="2" align="center" width="595px">
						<tr>
                		
						<td>
						<strong><xsl:value-of select="cv/entete/nom"/><br/></strong>
						<strong><xsl:value-of select="cv/entete/prenom"/><br/></strong>
						<xsl:value-of select="cv/entete/ddn"/><br/>
						<xsl:value-of select="cv/entete/nationalite"/><br/>
						<xsl:value-of select="cv/entete/mail"/> <br/>

						</td>
						</tr>
					
						
						
						<tr>
						<td>
							<table   width="595px" STYLE="background-color:#77B5FE" >
								<tr>
									<td align="center"><strong>Situation actuelle</strong></td>

								</tr>
							</table>
								<tr>
									<td>
										<xsl:value-of select="cv/situationActuelle"/><br/>
									</td>
								</tr>
							
						</td>
						</tr>
									<tr>
									<td>
									<table  width="595px"  STYLE="background-color:#77B5FE">
									<tr>
									<td align="center"><strong>Diplôme</strong></td>
									</tr>
									</table>
									</td>
									</tr>

									
										<tr>
											<td>
												<xsl:for-each select="cv/diplomes/diplome">
												<xsl:value-of select="."/><br/>
												</xsl:for-each>
												
											</td>
										</tr>
									

									<tr>
									<td>
									<table  width="595px"  STYLE="background-color:#77B5FE">
									<tr>
									<td align="center"><strong>Stages</strong></td>
									</tr>
									</table>
									</td>
									</tr>

									
										<tr>
											<td>
												<xsl:for-each select="cv/stages/stage">
												<xsl:value-of select="."/><br/>
												</xsl:for-each>
												
											</td>
										</tr>

										<tr>
									<td>
									<table  width="595px"  STYLE="background-color:#77B5FE">
									<tr>
									<td align="center"><strong>Compétences</strong></td>
									</tr>
									</table>
									</td>
									</tr>

									<tr>
											<td>
												<xsl:for-each select="cv/competences/competence"><br/>
												<strong><xsl:value-of select="titre"/><br/></strong>
												<xsl:value-of select="description"/><br/>
												</xsl:for-each>
												
											</td>
										</tr>

										<tr>
									<td>
									<table  width="595px"  STYLE="background-color:#77B5FE">
									<tr>
									<td align="center"><strong>Langues</strong></td>
									</tr>
									</table>
									</td>
									</tr>

									<tr>
											<td>
												<xsl:for-each select="cv/langues/langue">
												<xsl:value-of select="."/><br/>
												</xsl:for-each>
												
											</td>
										</tr>
										<tr>
										<td>
									<table  width="595px"  STYLE="background-color:#77B5FE">
									<tr>
									<td align="center"><strong>Loisirs</strong></td>
									</tr>
									</table>
									</td>
									</tr>

									<tr>
											<td>
												<xsl:for-each select="cv/loisirs/loisir"><br/>
												<xsl:value-of select="."/>
												</xsl:for-each>
												
											</td>
										</tr>


									







										


									



							
						
							
							
							

						
					

                         
						 



						
						</table>

						
						


					
                       	
                        



        </body>
</html>

</xsl:template>
</xsl:stylesheet>